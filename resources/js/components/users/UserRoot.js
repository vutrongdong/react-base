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
        const {users} = this.props;
        const userList = (users.length) ? (
            users.map(user => {
                console.log(user);
                return (
                    <div className="post card" key={user.id}>
                        <div className="card-content">
                            <p>name: {user.name}</p>
                            <p>email: {user.email}</p>
                        </div>
                    </div>
                )
            })
        ) : (
            <div className="center">No posts yet</div>
        )
        return (
            <div className="container home">
                <h4 className="center">Home</h4>
                {userList}
            </div>
        )
    }
}

const mapStateToProps = (state) => {
    return {
        users: state.users
    }
}

export default connect(mapStateToProps)(Users);
