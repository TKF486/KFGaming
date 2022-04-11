import React, { Component } from "react";
import ReactDOM, { render } from "react-dom";
import "bootstrap/dist/css/bootstrap.min.css";
import Image from "react-bootstrap/Image";
import Form from "react-bootstrap/Form";
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

    handleSubmit = (event) => {
        alert({ sessionValue });
    };

    render() {
        let games = this.state.games;
        var sessionValue = document.getElementById("userid").value;
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
                            <Card className="card_parent">
                                <Card.Img
                                    variant="top"
                                    src={"/storage/game/" + games.mainImage}
                                />
                                <Card.Body>
                                    <Card.Title>{games.gameName}</Card.Title>
                                    <hr></hr>
                                    <ListGroup
                                        vertical
                                        className="game_tag_container"
                                    >
                                        <ListGroup.Item className="game_tag">
                                            <span>Game Genre: </span>
                                            <span>{games.gameGenre}</span>
                                        </ListGroup.Item>

                                        <ListGroup.Item className="game_tag">
                                            <span>Game Publisher: </span>
                                            <span>{games.gamePublisher}</span>
                                        </ListGroup.Item>

                                        <ListGroup.Item className="game_tag">
                                            <span>Game Age Rating: </span>
                                            <span>{games.gameAgeRating}</span>
                                        </ListGroup.Item>

                                        <ListGroup.Item className="game_tag">
                                            <span>Game ReleaseDate: </span>
                                            <span>{games.gameReleaseDate}</span>
                                        </ListGroup.Item>

                                        <ListGroup.Item className="game_tag">
                                            <span>Game Language: </span>
                                            <span>{games.gameLanguage}</span>
                                        </ListGroup.Item>
                                    </ListGroup>
                                </Card.Body>
                            </Card>
                        </Col>
                    </Row>
                    <Row>
                        <Col sm={8}>
                            <div>
                                <Container className="checkout_container">
                                    <Row>
                                        <Col sm={11}>
                                            <h2>Buy {games.gameName}</h2>
                                        </Col>
                                        <Col sm={1}></Col>
                                    </Row>
                                    <Row>
                                        <Col sm={9}>
                                            <h5>RM179.99</h5>
                                        </Col>
                                        <Col sm={3}>
                                            <form
                                                onSubmit={this.handleSubmit}
                                                action="addOrder"
                                                method="POST"
                                            >
                                                <input
                                                    type="text"
                                                    id="userid"
                                                    value={sessionValue}
                                                />
                                                <input
                                                    type="text"
                                                    id="gameid"
                                                    value="14"
                                                />
                                                <button class="col btn btn-green-moon">
                                                    <span>Checkout</span>
                                                </button>
                                            </form>
                                        </Col>
                                    </Row>
                                </Container>
                            </div>
                            <br></br>

                            <h3>GAME DESCRIPTION</h3>
                            <hr></hr>
                            <p>{games.gameDesc}</p>
                            <br></br>

                            <h3>GAME SCREENSHOTS</h3>
                            <hr></hr>
                            <Image
                                className="d-block  w-100"
                                src={games.image1}
                                alt="First slide"
                                fluid
                            />
                            <Image
                                className="d-block  w-100"
                                src={games.image2}
                                alt="First slide"
                                fluid
                            />

                            <h3>GAME REQUIREMENTS</h3>
                            <hr></hr>
                            <pre>{games.gameRequirement}</pre>
                            <br></br>
                        </Col>
                        <Col sm={4}></Col>
                    </Row>
                </Container>
            </div>
        );
    }
}

if (document.getElementById("gameDetails")) {
    ReactDOM.render(<GameDetails />, document.getElementById("gameDetails"));
}
