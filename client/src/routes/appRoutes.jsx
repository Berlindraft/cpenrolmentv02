import React from 'react';
import { Routes, Route } from 'react-router-dom';
import Home from '../pages/Home';
import About from '../pages/About';
import Contacts from '../pages/Contacts';
import Offers from '../pages/Offers';

import Login from '../pages/auth/Login';
import Register from '../pages/auth/Register';


import NotFound from '../pages/NotFound';



const AppRoutes = () => {
return (
        <Routes>
            {/* default page */}
            <Route path="/" element={<Login />} />
            {/* main pages */}
            <Route path="/home" element={<Home />} />
            <Route path="/about" element={<About />} />
            <Route path="/contacts" element={<Contacts />} />
            <Route path="/offers" element={<Offers />} />
            {/* authenticate */}
            <Route path="/login" element={<Login />} />
            <Route path="/register" element={<Register />} />
            {/* default for when a page is not found */}
            <Route path="/*" element={<NotFound />} />
        </Routes>
    );
}

export default AppRoutes;