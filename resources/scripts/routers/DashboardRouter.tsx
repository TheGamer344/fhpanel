import React from 'react';
import NavigationBar from '@/components/NavigationBar';
import SubNavigation from '@/components/elements/SubNavigation';
import { useLocation, Route, useHistory } from 'react-router-dom'; // Import useHistory for navigation
import FreeServersContainer from '@/components/dashboard/freeservers/FreeServersContainer';

import { NavigationLinks, NavigationRouter } from '@/blueprint/extends/routers/DashboardRouter';
import BeforeSubNavigation                   from '@/blueprint/components/Navigation/SubNavigation/BeforeSubNavigation';
import AdditionalAccountItems                from '@/blueprint/components/Navigation/SubNavigation/AdditionalAccountItems';
import AfterSubNavigation                    from '@/blueprint/components/Navigation/SubNavigation/AfterSubNavigation';

export default () => {
    const location = useLocation();
    const history = useHistory(); // Hook to access history object

    const handleRedirect = () => {
        history.push('/freeservers'); // Redirect to /freeservers
    };

    return (
        <>
            {/* Button at the top that redirects to /freeservers */}
            <button onClick={handleRedirect} style={{ margin: '10px' }}>
                Get a Free Server
            </button>

            <NavigationBar />
            {location.pathname.startsWith('/account') && (
                <SubNavigation id={'SubNavigation'}>
                    <BeforeSubNavigation />
                    <div>
                        <NavigationLinks />
                        <AdditionalAccountItems />
                    </div>
                    <AfterSubNavigation />
                </SubNavigation>
            )}
            <NavigationRouter />
            
            {/* Route for FreeServersContainer */}
            <Route path={'/freeservers'} exact component={FreeServersContainer} />
        </>
    );
};
