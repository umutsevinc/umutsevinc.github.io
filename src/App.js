import React, { Component } from 'react'
import { config } from 'react-spring'
import Grid from './Grid'
import { Slug, Fade } from './Primitives'
import data from './data'
import 'antd/dist/antd.css'
import 'bulma'
import './Styles.css'
import { Icon } from 'antd'

class Cell extends Component {
  render() {
    const { toggle, name, description, css, active } = this.props
    return (
      <div
        className="cell"
        style={{ backgroundImage: css, cursor: !active ? 'pointer' : 'auto' }}
        onClick={!active ? toggle : undefined}>
        <Fade show={active} delay={active ? 200 : 0}>
          <div className="details">
            <Slug delay={100}>
              <div className="circle" style={{ background: css }} />
              <div className="close">
                <Icon
                  type="close"
                  style={{ cursor: 'pointer' }}
                  onClick={toggle}
                />
              </div>
              <h1>{name}</h1>
              <p>{description}</p>
            </Slug>
          </div>
        </Fade>
        <Fade
          show={!active}
          from={{ opacity: 0, transform: 'translate3d(0,140px,0)' }}
          enter={{ opacity: 1, transform: 'translate3d(0,0px,0)' }}
          leave={{ opacity: 0, transform: 'translate3d(0,-50px,0)' }}
          delay={active ? 0 : 100}>
          <div className="default">
            <div style={{ zIndex: 1 }}>{name}</div>
          </div>
        </Fade>
      </div>
    )
  }
}

export default class App extends Component {
  state = { data }

  componentWillMount() {
    document.addEventListener('DOMContentLoaded', () => {
      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
      if ($navbarBurgers.length > 0) {
        $navbarBurgers.forEach(el => {
          el.addEventListener('click', () => {
            const target = el.dataset.target;
            const $target = document.getElementById(target);
            const navbar = document.getElementById("navbar-top");
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');
            navbar.classList.toggle('is-active');
          });
        });
      }

    });
  }

  render() {
    return (
      <div>

        <nav id="navbar-top" class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
              <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28" />
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div>
          <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
              <a class="navbar-item">
                Experiences
              </a>
              <a class="navbar-item">
                Educations
              </a>
              <a class="navbar-item">
                Contact
              </a>
            </div>
            <div class="navbar-end">
              <div class="navbar-item">
                <div class="buttons">
                  <a class="button is-light">
                    GITHUB
                  </a>
                </div>
              </div>
            </div>
          </div>
        </nav>

        <div className="titleSection">
          <h1 className="title">Experiences</h1>
        </div>
        <Grid
          className="grid"
          // Arbitrary data, should contain keys, possibly heights, etc.
          data={this.state.data}
          // Key accessor, instructs grid on how to fet individual keys from the data set
          keys={d => d.name}
          // Can be a fixed value or an individual data accessor
          heights={d => d.height}
          // Number of columns
          columns={2}
          // Space between elements
          margin={50}
          // Removes the possibility to scroll away from a maximized element
          lockScroll={true}
          // Delay when active elements (blown up) are minimized again
          closeDelay={100}
          // Regular react-spring configs
          config={config.slow}>
          {(data, active, toggle) => (
            <Cell {...data} active={active} toggle={toggle} />
          )}
        </Grid>
        <div className="titleSection">
          <h1 className="title">Educations</h1>
        </div>
        <Grid
          className="grid"
          data={this.state.data}
          keys={d => d.name}
          heights={d => d.height}
          columns={2}
          margin={50}
          lockScroll={true}
          closeDelay={100}
          config={config.slow}>
          {(data, active, toggle) => (
            <Cell {...data} active={active} toggle={toggle} />
          )}
        </Grid>
      </div>
    )
  }
}