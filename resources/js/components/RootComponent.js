import React, {Component} from 'react';
import { BrowserRouter } from 'react-router-dom';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import store from '../store';
import '../public/css/main.css';
import Navbar from './Navbar';
import RootRouter from '../router';

export default class RootComponent extends Component {
  render() {
    return (
      <BrowserRouter>
        <div className="RootComponent">
          <Navbar/>
          <RootRouter/>
        </div>
      </BrowserRouter>
    )
  }
}

ReactDOM.render(
  <Provider store={store}>
    <RootComponent />
  </Provider>,
  document.getElementById('app')
);