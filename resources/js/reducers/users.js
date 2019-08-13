import { SET_AUTHENTICATED, GET_USER_DATA} from '../constant/action-type'

export default (state = { users: [] }, action) => {
  switch (action.type) {
    case GET_USER_DATA:
      return [...state, action.users];
    case SET_AUTHENTICATED:
      return Object.assign({}, state, { authenticated: action.authenticated });
    default:
      return state;
  }
};