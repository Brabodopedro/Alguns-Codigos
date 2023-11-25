import { Fragment } from "react";
import Global from "./styles/Global";
import Header from "./components/Header"
import 'react-toastify/dist/ReactToastify.css';
import Home from "./pages/home";
import Footer from "./components/Footer";


function App() {
  return (
    <Fragment>
        <Header/>
        <Anuncio/>
        <Footer/>
        <Global />
    </Fragment>
  );
}

export default App;
