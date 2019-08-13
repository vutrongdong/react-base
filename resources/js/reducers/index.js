import { combineReducers } from 'redux';
import users from './users';
import auth from './auth';

export default combineReducers({
  auth: auth,
  users: users
});
