import {apiRequest} from '../apiRequest'
import {SMART_PIRAGO} from '../constant/api-type'
import { GET_USER_DATA } from '../constant/action-type'

export const setUserData = users => ({
	type: GET_USER_DATA,
	users: users
});

export const getUsers = () => dispatch =>{
    return new Promise(
        (resolve, reject) => {
            apiRequest('/api/users/', SMART_PIRAGO.api_method.get)
            .then(response => {
                console.log(111, response)
                    dispatch(setUserData(response.data));
                    resolve(response.data);
                })
                .catch(function (error) {
                    reject(error);
                });
        }
    );
};

