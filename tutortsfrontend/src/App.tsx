import Button from './components/Button'
import logo from './assets/logo.png'
import Tailwind from 'tailwindcss'
import './App.css'

function App() {
  return (
    <div style={{"padding": "0px"}}>
      <div style={{"display": "flex", "backgroundColor": "#1A2A2F", 'padding': '16px 64px', 'justifyContent': 'flex-start', 'alignItems': 'center'}}>
          <img src={logo} alt="" sizes='64px'/>
          <p style={{ "color": "white", 'fontWeight': 'bold', 'fontSize': '12px', 'marginLeft': '8px' }}>BANDUNG<br/>SEMESTA<br/>TEKNOLOGI</p>
      </div>
      <Button onClick={() => {
        alert('Go!!')
      }}>Hello</Button>
    </div>
  )
}

export default App
