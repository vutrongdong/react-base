import React from "react";
// core components
import { connect } from 'react-redux';
import GridItem from "../../common/components/Grid/GridItem.jsx";
import GridContainer from "../../common/components/Grid/GridContainer.jsx";
import Table from "../../common/components/Table/Table.jsx";
import Card from "../../common/components/Card/Card.jsx";
import CardHeader from "../../common/components/Card/CardHeader.jsx";
import CardBody from "../../common/components/Card/CardBody.jsx";

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
      const tableHead = ["User name", "Email", "Phone", "City"];
      const tableData = this.props.users.map((user)=> {
            return [user.username, user.email, user.phone, 'ha noi'];
      })
      return (
        <GridContainer>
            <GridItem xs={12} sm={12} md={12}>
                <Card>
                    <CardHeader color="primary">
                        <b>User Table</b>
                    </CardHeader>
                    <CardBody>
                        <Table
                         tableHeaderColor="primary"
                         tableHead={tableHead}
                         tableData={tableData}
                        />
                    </CardBody>
                </Card>
            </GridItem>
        </GridContainer>
      )
  }
}

const mapStateToProps = (state) => {
  return {
      users: state.users
  }
}

export default connect(mapStateToProps)(Users);
