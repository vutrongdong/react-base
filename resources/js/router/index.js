import React, {Component} from 'react';
import { Route, Switch } from 'react-router-dom';
import Home from '../components/tests/Home';
import About from '../components/tests/About';
import postRoutes from './posts';
import userRoutes from './users';

class RootRouter extends Component {
  render() {
    return (
        <div className="routerRoot">
            <Switch>
                <Route exact path='/home' component={Home} />
                <Route path='/about' component={About} />
            </Switch>
            {userRoutes}
            {postRoutes}
        </div>
    )
  }
}

export default RootRouter;