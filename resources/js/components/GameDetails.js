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
            games: [],
            // updatePostData: { id: "", title: "", content: "", user_id: "" },
            // updatePostModal: false,
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
                </tr>
            );
        });

        return (
            <div className="container">
                <Table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>GameName</th>
                        </tr>
                    </thead>
                    <tbody>{games}</tbody>
                </Table>
            </div>
        );
    }
}

if (document.getElementById("gameDetails")) {
    ReactDOM.render(<GameDetails />, document.getElementById("gameDetails"));
}
