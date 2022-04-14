import React, { Component } from "react";
import ReactDOM, { render } from "react-dom";
import "bootstrap/dist/css/bootstrap.min.css";
import Image from "react-bootstrap/Image";
import {
    Button,
    Carousel,
    Container,
    Row,
    Col,
    Card,
    CardGroup,
    ListGroup,
    Table,
} from "react-bootstrap";
import axios from "axios";

export default class GameListing extends Component {
    constructor() {
        super();
        this.state = {
            games: [],
        };
    }

    loadGame() {
        axios.get("http://127.0.0.1:8000/api/gameDetails").then((response) => {
            this.setState({
                games: response.data,
            });
        });
    }

    componentWillMount() {
        this.loadGame();
    }

    render() {
        let games = this.state.games.map((game) => {
            return (
                <div className="main_container">
                    <Col>
                        <Card
                            className="card_parent"
                            style={{ width: "18rem" }}
                        >
                            <Card.Img
                                variant="top"
                                src={"/storage/game/" + game.mainImage}
                            />
                            <Card.Body>
                                <Card.Title>
                                    <a href={"/gameDetails/?gameID=" + game.id}>
                                        {game.gameName}
                                    </a>
                                </Card.Title>
                                <Card.Text>{game.gameDesc}</Card.Text>
                            </Card.Body>
                            <Card.Footer>
                                <small className="text-muted">
                                    RM{game.gamePrice}
                                </small>
                                {/* <Button>Store Page</Button> */}
                            </Card.Footer>
                        </Card>
                    </Col>
                </div>
            );
        });

        return (
            <div className="main_container">
                <Row>
                    <Carousel>
                        <Carousel.Item>
                            <Image
                                className="d-block  w-100"
                                src="https://images.greenmangaming.com/24b93a7b7cf2469aaa414c8a41c63b81/0fb07bd75c844e3c88f1146645ec68ac.jpg"
                                alt="First slide"
                                fluid
                            />
                        </Carousel.Item>
                        <Carousel.Item>
                            <Image
                                className="d-block  w-100"
                                src="https://images.greenmangaming.com/24b93a7b7cf2469aaa414c8a41c63b81/0fb07bd75c844e3c88f1146645ec68ac.jpg"
                                alt="Second slide"
                                fluid
                            />
                        </Carousel.Item>
                    </Carousel>
                </Row>
                <CardGroup className="card_parent">
                    <Row xs={3} md={3} className="g-4">
                        {games}
                    </Row>
                </CardGroup>
            </div>
        );
    }
}

if (document.getElementById("gameListing")) {
    ReactDOM.render(<GameListing />, document.getElementById("gameListing"));
}
