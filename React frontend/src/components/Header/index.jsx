import React from "react";
import LogoImg from "../../assets/logo.png";
import { Container, Logo, Menu } from "./styles";

const Header = () => {

  return (
    <Container>
      <Logo>
      <img src={LogoImg} alt="" />
      </Logo>
      <Menu>
        <ul>
          <li><span>Comprar Carro</span></li>
          <li><span>Anunciar</span></li>
          <li><span>Cadastrar-se</span></li>
          <li><span>Login</span></li>
        </ul>
      </Menu>
    </Container>
  )
}

export default Header;