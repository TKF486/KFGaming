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
                            style={{ border: "10px" }}
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
                                <small className="price_text">
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
                                className="d-block  w-50 justify-content-md-center"
                                src="https://images.greenmangaming.com/52afcbfc92cd440bbe33e93f76e1b239/254fcb09b85345c78d68f6dcb336786a.jpg"
                                alt="First slide"
                                fluid
                            />
                        </Carousel.Item>
                        <Carousel.Item>
                            <Image
                                className="d-block  w-50 justify-content-md-center"
                                src="https://images.greenmangaming.com/70024f3cecd4441996358916a06675d0/9f9704a98aa04b9eb4d53770f4cde91d.jpg"
                                alt="Second slide"
                                fluid
                            />
                        </Carousel.Item>
                    </Carousel>
                </Row>
                <CardGroup className="card_parent" style={{ border: "10px" }}>
                    <Row xs={3} md={3} className="g-4 cardListing_parent">
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
