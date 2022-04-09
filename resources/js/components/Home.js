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
                                        src={"/storage/game/" + games.file_path}
                                        alt="First slide"
                                        fluid
                                    />
                                </Carousel.Item>
                                <Carousel.Item>
                                    <Image
                                        className="d-block  w-100"
                                        src="https://cdn.cloudflare.steamstatic.com/steam/apps/1475810/ss_b59b7c16cb92dece04459303befb1f256fe928ea.1920x1080.jpg?t=1648479992"
                                        alt="First slide"
                                        fluid
                                    />
                                </Carousel.Item>
                            </Carousel>
                        </Col>
                        <Col sm={4}>
                            <Card style={{ width: "18rem" }}>
                                <Card.Img
                                    variant="top"
                                    src="https://cdn.cloudflare.steamstatic.com/steam/apps/1475810/header.jpg?t=1648479992"
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
                                </Card.Body>
                            </Card>
                        </Col>
                    </Row>
                    <Row>
                        <Col sm={8}>
                            <h3>GAME DESCRIPTION</h3>
                            <hr></hr>
                            <p>{games.gameDesc}</p>
                        </Col>
                        <Col sm={4}>
                            <h3>GAME INFORMATION</h3>
                            <div>
                                <span>Publisher: </span>
                                <span>{games.gamePublisher}</span>
                            </div>
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
