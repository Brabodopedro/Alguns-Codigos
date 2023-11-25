import React from "react";
import { FaArrowRight } from "react-icons/fa";


import {
  Container,
  Description,
  Img,
  Itens
} from "./styles";


const Card = () => {
  return (
    <Container>
      <Img>
        <img src="https://media.istockphoto.com/id/1744546629/pt/foto/japanese-park-parking-lot.jpg?s=2048x2048&w=is&k=20&c=fn61HGiyybTcX0fv1eCXl0koOLzmiThJbOWtZazrlm0=" alt="" />
      </Img>
      <Description>
        <h4> Nome: </h4>
        <Itens>
            <span>Modelo: </span>
            <span>Marca: </span>
            <span>Ano: </span>
            <span>Valor:</span>
        </Itens>
        <span>Detalhes<FaArrowRight/></span>
      </Description>
    </Container>
  )
}

export default Card;