import React from 'react';
import image from '../src/img/Solid-900-x-500.png';
import img from '../src/img/programmer-1653351_960_720.png';
import img3 from '../src/img/cbb8c87aded02acea10d60c41461af0c1.jpg';



class App extends React.Component {
    render() {
        return (
            <div>
                <Foto2/>
                <Header/>
                <Foto />
                <Content/>
                <Foto3/>
            </div>
        );
    }
}
class Header extends React.Component {
    render() {
        return (
            <div>
                <h1>Header</h1>
            </div>
        );
    }
}

class Foto extends React.Component{
    render(){
        return(
            <img className='logo' alt='img' src={image} width="150" height="100"/>
        );
    }
}

class Foto2 extends React.Component{
    render(){
        return(
            <img className='foto' alt='img' src={img} width="150" height="100"/>
        );
    }
}
class Foto3 extends React.Component{
    render(){
        return(
            <img className='foto3' alt='img' src={img3} width="150" height="100"/>
        );
    }
}
class Content extends React.Component {
    render() {
        return (
            <div>
                <h2>Content</h2>
            </div>
        );
    }
}
export default App;


