import React, {Component} from 'react';
import ReactPaginate from 'react-paginate';
import { Tab, Tabs, TabList, TabPanel } from 'react-tabs';
import 'react-tabs/style/react-tabs.css';
import axios from 'axios';

class Articles extends Component {
  constructor() {
    super();
    this.state = { articles: [], earthquakes: [], loading: true};
  }

  componentDidMount() {
    this.getArticles();
  }

  getArticles() {
    axios.get(`https://localhost:8000/api/articles`).then(articles => {
      this.setState({ articles: articles.data, loading: false})
    })
  }

  handlePageClick = (data) => {
    console.log('onPageChange', data);
    let selected = data.selected;
    let offset = Math.ceil(selected * 10);

    this.setState({ offset: offset }, () => {
      this.getArticles();
    });
  };

  render() {
    const currentPage = Math.round(this.state.offset / 10);

    const loading = this.state.loading;
    return(
      <div>
        <section className="row-section">
          <div className="container">
            <div className="row">
              <h2 className="text-center"><span>List of articles</span></h2>
            </div>
            {loading ? (
              <div className={'row text-center'}>
                <span className="fa fa-spin fa-spinner fa-4x"></span>
              </div>
            ) : (
              <div className={'row'}>
                  { this.state.articles.map(article =>
                    <div className="col-md-10 offset-md-1 row-block" key={article.id}>
                      <ul id="sortable">
                        <li>
                          <div className="media">
                            <div className="media-body">
                              <div className="media-description">
                                <a href={article.link}>
                                  <h4>{article.title}</h4>
                                </a>
                                <p>{article.description}</p>
                              </div>
                              <div className="media-date">
                                <p>{article.created_at}</p>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  )}
              </div>
            )}
          </div>
        </section>
      </div>
    )
  }
}
export default Articles;