import { GET_USER_DATA} from '../constant/action-type'

var users = (state = [], action) => {
    switch (action.type) {
        case GET_USER_DATA:
            return action.users
        default:
        return state;
    }
}

export default users
