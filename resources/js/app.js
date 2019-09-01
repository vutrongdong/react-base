import React from "react";
import ReactDOM from "react-dom";
import { Provider } from 'react-redux';
import { createBrowserHistory } from "history";
import { Router, Route, Switch, Redirect } from "react-router-dom";
import store from './store';

// core components
import Admin from "./views/Admin.jsx";

import "./assets/css/material-dashboard-react.css?v=1.8.0";

const hist = createBrowserHistory();

if(document.getElementById('app')) {
    ReactDOM.render(
    <Provider store={store}>
        <Router history={hist}>
        <Switch>
            <Route path="/admin" component={Admin} />
            <Redirect from="/" to="/admin/dashboard" />
        </Switch>
        </Router>
    </Provider>,
    document.getElementById("app")
    );
}
