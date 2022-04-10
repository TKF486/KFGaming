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
                <tr key={game.id}>
                    <td>{game.id}</td>
                    <td>{game.gameName}</td>
                    <td>{game.gameDesc}</td>
                </tr>
            );
        });

        return (
            <div className="container">
                <Card style={{ width: "18rem" }}>
                    <Card.Img variant="top" src="/img/apex.png" />
                    <Card.Body>
                        <Card.Title>Apex</Card.Title>
                        <Card.Text>
                            Some quick example text to build on the card title
                            and make up the bulk of the card's content.
                        </Card.Text>
                        <Button variant="primary">Go somewhere</Button>
                    </Card.Body>
                </Card>
            </div>
        );
    }
}

if (document.getElementById("gameListing")) {
    ReactDOM.render(<GameListing />, document.getElementById("gameListing"));
}
