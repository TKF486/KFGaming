import React from "react";
import ReactDOM from "react-dom";
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

function Testing() {
    // const btn = { backgroundColor: "#FF0000" };
    // const container_colors = { backgroundColor: "#FF0000" };
    return (
        <div className="main_container">
            <p>this is testing page</p>
        </div>
    );
}

export default Testing;

if (document.getElementById("testing")) {
    ReactDOM.render(<Testing />, document.getElementById("testing"));
}
