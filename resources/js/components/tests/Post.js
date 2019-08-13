import React, {Component} from 'react'
import axios from 'axios'

class Post extends Component {
    constructor(props) {
        super(props);
        
        this.state = {
            post: {}
        };
    }
    componentDidMount() {
        let id = this.props.match.params.post_id;
        axios.get('https://jsonplaceholder.typicode.com/posts/' + id)
        .then(res=> {
            this.setState({
                post: res.data
            })
        })
    }
    render() {
        let {post} = this.state;
        return (
            <div className="container">
                <h4>route param: {this.state.id}</h4>
                <span>{post.title}</span>
                <p>{post.body}</p>
            </div>
        )
    }
}

export default Post;