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
    ListGroup,
    Table,
} from "react-bootstrap";
import axios from "axios";

export default class GameDetails extends Component {
    constructor() {
        super();
        this.state = {
            games: "",
        };
    }

    loadGame() {
        axios
            .get("http://127.0.0.1:8000/api/gameDetails/14")
            .then((response) => {
                this.setState({
                    games: response.data,
                });
            });
    }

    componentWillMount() {
        this.loadGame();
    }

    render() {
        let games = this.state.games;
        return (
            <div className="main_container">
                <Container fluid="xxl">
                    <Row>
                        <Col sm={8}>
                            <Carousel>
                                <Carousel.Item>
                                    <Image
                                        className="d-block  w-100"
                                        src={games.image1}
                                        alt="First slide"
                                        fluid
                                    />
                                </Carousel.Item>
                                <Carousel.Item>
                                    <Image
                                        className="d-block  w-100"
                                        src={games.image2}
                                        alt="First slide"
                                        fluid
                                    />
                                </Carousel.Item>
                            </Carousel>
                        </Col>
                        <Col sm={4}>
                            <Card>
                                <Card.Img
                                    variant="top"
                                    src={"/storage/game/" + games.mainImage}
                                />
                                <Card.Body>
                                    <Card.Title>GhostWire</Card.Title>
                                    <label>
                                        PUBLISHER: {games.gamePublisher}
                                    </label>
                                    <ListGroup vertical>
                                        <ListGroup.Item>
                                            Singleplayer
                                        </ListGroup.Item>
                                        <ListGroup.Item>
                                            supernatural
                                        </ListGroup.Item>
                                    </ListGroup>
                                    <br></br>
                                    <button
                                        type="button"
                                        class="btn btn-primary btn-lg btn-block"
                                    >
                                        Checkout
                                    </button>
                                </Card.Body>
                            </Card>
                        </Col>
                    </Row>
                    <Row>
                        <Col sm={8}>
                            <h3>GAME DESCRIPTION</h3>
                            <hr></hr>
                            <p>{games.gameDesc}</p>
                            <br></br>
                            <Image
                                className="d-block  w-100"
                                src={games.image1}
                                alt="First slide"
                                fluid
                            />
                        </Col>
                        <Col sm={4}>
                            <h3>GAME INFORMATION</h3>
                            <hr></hr>
                            <div>
                                <span>Publisher: </span>
                                <span>{games.gamePublisher}</span>
                            </div>
                            <br></br>
                            <h3>GAME REQUIREMENTS</h3>
                            <hr></hr>
                            <pre>{games.gameRequirement}</pre>
                        </Col>
                    </Row>
                </Container>
            </div>
        );
    }
}

if (document.getElementById("gameDetails")) {
    ReactDOM.render(<GameDetails />, document.getElementById("gameDetails"));
}
