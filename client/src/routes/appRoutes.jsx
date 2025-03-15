import React from 'react';
import { Routes, Route } from 'react-router-dom';
import Home from '../pages/Home';
import About from '../pages/About';
import Contacts from '../pages/Contacts';
import Offers from '../pages/Offers';
import NotFound from '../pages/NotFound';



const AppRoutes = () => {
return (
        <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/home" element={<Home />} />
            <Route path="/about" element={<About />} />
            <Route path="/contacts" element={<Contacts />} />
            <Route path="/offers" element={<Offers />} />
            
            {/* default for when a page is not found */}
            <Route path="/*" element={<NotFound />} />
        </Routes>
    );
}

export default AppRoutes;