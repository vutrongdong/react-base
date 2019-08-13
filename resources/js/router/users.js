import React from 'react';
import { Route, Switch } from 'react-router-dom';
import Users from '../components/users/UserRoot';

const userRoutes = (
    <Switch>
        <Route path='/users' component={Users} />
    </Switch>
)
   
export default userRoutes