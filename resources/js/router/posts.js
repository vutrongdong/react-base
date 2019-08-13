import React from 'react';
import { Route, Switch } from 'react-router-dom';
import Post from '../components/tests/Post';

const postRoutes = (
    <Switch>
        <Route path='/post/:post_id' component={Post} />
    </Switch>
)
   
export default postRoutes