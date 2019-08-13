import {apiRequest} from '../apiRequest'
import {SMART_PIRAGO} from '../constant/api-type'
import { SET_USER_DATA, SET_AUTHENTICATED, GET_USER_DATA } from '../constant/action-type'

export const setUserData = user => ({
	type: SET_USER_DATA,
	user
});

export const setAuthenticated = authenticated => ({
	type: SET_AUTHENTICATED,
	authenticated
});

export const getUsers = () => {
    return new Promise(
        (resolve, reject) => {
            apiRequest('/api/user/', SMART_PIRAGO.api_method.get)
                .then(response => {
                    resolve(response.data);
                })
                .catch(function (error) {
                    reject(error);
                });
        }
    );
};

