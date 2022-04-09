import React from "react";
import ReactDOM from "react-dom";
import { Button, Carousel, Container, Row, Col, Card } from "react-bootstrap";
import CardGroup from 'react-bootstrap/CardGroup';
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
} from "react-bootstrap";

function GameDetails() {
    // const btn = { backgroundColor: "#FF0000" };
    // const container_colors = { backgroundColor: "#FF0000" };
    const background_colors = {
        backgroundColor: "#0c192e",
    };
    const col_colors = {};
    return (
       
        <div className="main_container">
            <Container fluid="xxl">
                <Row>
                    <Col style={col_colors} sm={8}>
                        <Carousel>
                            <Carousel.Item>
                                <Image
                                    className="d-block  w-100"
                                    src="https://cdn.cloudflare.steamstatic.com/steam/apps/1475810/ss_72c5a29ebef19e5f7c046448e23c7a2a10d9d8f5.1920x1080.jpg?t=1648479992"
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
                    <Col style={col_colors} sm={4}>
                        <Card style={{ width: "18rem" }}>
                            <Card.Img
                                variant="top"
                                src="https://cdn.cloudflare.steamstatic.com/steam/apps/1475810/header.jpg?t=1648479992"
                            />
                            <Card.Body>
                                <Card.Title>GhostWire</Card.Title>
                                <Card.Text>
                                    Tokyo's population has vanished, and deadly
                                    supernatural forces prowl the streets. Use
                                    an arsenal of elemental abilities to unravel
                                    the truth behind the disappearance and save
                                    Tokyo.
                                </Card.Text>
                            </Card.Body>
                        </Card>
                    </Col>
                </Row>
            </Container>
        </div>
    );
}

export default GameDetails;

if (document.getElementById("gameDetails")) {
    ReactDOM.render(<GameDetails />, document.getElementById("gameDetails"));
}
