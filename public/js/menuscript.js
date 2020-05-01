"use strict";

const Cont = ReactBootstrap.Container;
const Row = ReactBootstrap.Row;
const Col = ReactBootstrap.Col;

//Header

const Header = () => (
      <div className="container">
        <div className="row">
          <div className="col-xs-12">
            <nav className="navbar navbar-default">
              <div className="navbar-header">
                <a className="navbar-brand brand" href="/">
                  DeliPizza
                </a>
                
                <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target=".mobile" aria-expanded="false" aria-controls="navbar">
                  <span className="sr-only">Toggle navigation</span>
                  <span className="icon-bar"></span>
                  <span className="icon-bar"></span>
                  <span className="icon-bar"></span>
                </button>
              </div>
              
              <div id="navbar" className="navbar-collapse pull-right collapse mobile">
                <ul className="nav navbar-nav pull-left">
                  <li className="active">
                    <a href="/menu">Order online</a>
                  </li>
                  <li>
                    <a href="/about">About Us</a>
                  </li>                
                </ul>
              
                <div className="phone-info pull-left">
                  <p className="phone-call">
                    Prefer to order by phone? Call Us!
                  </p>
                  <p className="phone-number">
                    1 505 12345678
                  </p>
                </div>
                
                <div className="order-ready pull-left">
                  <a href="#" className="bg-secondary"><span><i className="po po-scooter"></i></span> Ready to order?</a>
                  <p id="bill">                    
                    <span>0</span> <span>items</span> <span>€18.00</span>                    
                  </p>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
);

ReactDOM.render(
  <Header />,
  document.querySelector("header"),
);

//Social icons list

const Social = [
  {
    id: "1",
    icon: "fa fa-facebook",
    name: "Facebook",
    link: "#"
  },
  {
    id: "2",
    icon: "fa fa-twitter",
    name: "Twitter",
    link: "#"
  },
  {
    id: "3",
    icon: "fa fa-instagram",
    name: "Instagram",
    link: "#"
  },
  {
    id: "4",
    icon: "fa fa-youtube",
    name: "Youtube",
    link: "#"
  },
];

function SocialIcons(props) {
  const list = props.social;
  const socialList = list.map((item)=>{
    return(
      <li key={item.id}>
        <a href={item.link} title={item.name}>
          <span className={item.icon}></span>
          <span className="sr-only">{item.name}</span>
        </a>
      </li>
    );
  });
  
  return(
    <ul>{socialList}</ul>
  );
}

if (document.getElementById("social-nav")){
  ReactDOM.render(
    <SocialIcons social = {Social} />,
    document.getElementById("social-nav"),
  );
}