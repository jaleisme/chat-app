// import React from "react";
import { RouterProvider, createBrowserRouter } from "react-router-dom";
import Home from './pages/Home'
import Chat from './pages/Chat'
import Login from './pages/Login'
import Register from './pages/Register'
import Verify from './pages/Verify'

const router = createBrowserRouter([
  {
    path: '/',
    element: <Home />
  },
  {
    path: '/chat',
    element: <Chat />
  },

  // Auth URLs
  {
    path: '/login',
    element: <Login />
  },
  {
    path: '/register',
    element: <Register />
  },
  {
    path: '/verify',
    element: <Verify />
  },
]);

const App = () => {
    return <RouterProvider router={router} />
}

export default App;