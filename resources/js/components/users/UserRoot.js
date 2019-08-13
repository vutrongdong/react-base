import React from 'react';
import { connect } from 'react-redux';
import {getUsers} from '../../actions/users';

class Users extends React.Component{
    componentDidMount() {
        this.fetchUsers();
    }
    fetchUsers() {
        var {dispatch} = this.props;
        dispatch(getUsers());
    }
    render() {
        return (
            <div className="container">
                <h4 className="center">Users</h4>
                <p>=============== Users ==============</p>
            </div>
        )
    }
}

const mapStateToProps = (state) => {
    console.log(state);
    return {
        users: state.users
    }
}

export default connect(mapStateToProps)(Users);
