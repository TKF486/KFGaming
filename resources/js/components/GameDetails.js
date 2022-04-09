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
            // updatePostData: { id: "", title: "", content: "", user_id: "" },
            // updatePostModal: false,
        };
    }

    loadGame() {
        axios
            .get("http://127.0.0.1:8000/api/gameDetails/1")
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
            <Table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>GameName</th>
                        <th>GamePrice</th>
                        <th>GameDesc</th>
                        <th>GameRequirement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr key={games.id}>
                        <td>{games.id}</td>
                        <td>{games.gameName}</td>
                        <td>{games.gamePrice}</td>
                        <td>{games.gameDesc}</td>
                        <td>{games.gameRequirement}</td>
                    </tr>
                </tbody>
            </Table>
        );
    }
}

if (document.getElementById("gameDetails")) {
    ReactDOM.render(<GameDetails />, document.getElementById("gameDetails"));
}
