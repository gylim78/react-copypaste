
import './App.css';

import React from "react";

import 'bootstrap/dist/css/bootstrap.min.css';
import Button from 'react-bootstrap/Button';
import MyModal from './components/MyModal.js';

import axios from "axios";



function App() {
  const baseURL = "http://127.0.0.1/load_data.php";

  var data = {};
  var rows

  React.useEffect(() => {
    axios.get(baseURL).then((response) => {
      console.log(response.data);
      data = response.data;

      const rows = data.map(row => (
        <div
          key={row.rec_no}
          id={row.rec_no}
          title={row.title}
        >
          {row.title}
        </div>
      ))
    });
  }, []);




  return (
    <div className="App">

    {rows}


    </div>
  );
}

export default App;
