import React, {Component} from 'react';
import {Route, Routes, Navigate, Link, withRouter} from 'react-router-dom';
import Articles from './Articles';

class Home extends Component {

  render() {
    return (
      <div>
        <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
          <Link className={"navbar-brand"} to={"/"}> Symfony React Project </Link>
          <div className="collapse navbar-collapse" id="navbarText">
            <ul className="navbar-nav mr-auto">
              <li className="nav-item">
                <Link className={"nav-link"} to={"/articles"}> Articles </Link>
              </li>
            </ul>
          </div>
        </nav>
        <Routes>
          <Route path="/" element={<Navigate replace to="/articles" />} />
          <Route path="/articles" element={<Articles/>} />
        </Routes>
      </div>
    )
  }
}

export default Home;