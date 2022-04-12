import React, { Component, useState } from "react";
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
    Modal,
} from "react-bootstrap";
import axios from "axios";

export default class CheckoutModal extends Component {
    render() {
        const [show, setShow] = useState(false);
        const handleClose = () => setShow(false);
        const handleShow = () => setShow(true);
        return (
            <>
                <p>testing</p>
            </>
        );
    }
}

if (document.getElementById("checkoutModal")) {
    ReactDOM.render(
        <CheckoutModal />,
        document.getElementById("checkoutModal")
    );
}
