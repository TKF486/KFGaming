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
                <div className="container">
                    <Card style={{ width: "18rem" }}>
                        <Card.Img
                            variant="top"
                            src={"/storage/game/" + game.mainImage}
                        />
                        <Card.Body>
                            <Card.Title>
                                <a href="/gameDetails?=gameId=@game.gameId">
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
                </div>
            );
        });

        return (
            <div className="container">
                <Row xs={1} md={3} className="g-4">
                    {Array.from({ length: 4 }).map((_, idx) => (
                        <Col>
                            <CardGroup>{games}</CardGroup>
                        </Col>
                    ))}
                </Row>
            </div>
        );
    }
}

if (document.getElementById("gameListing")) {
    ReactDOM.render(<GameListing />, document.getElementById("gameListing"));
}
