import React from 'react';

/* blueprint/import *//* VersionchangerImportStart */import VersionchangerLnmbvresnr from '@/blueprint/extensions/versionchanger/VersionChangerContainer';/* VersionchangerImportEnd */

interface RouteDefinition {
  path: string;
  name: string | undefined;
  component: React.ComponentType;
  exact?: boolean;
  adminOnly: boolean | false;
  identifier: string;
}
interface ServerRouteDefinition extends RouteDefinition {
  permission: string | string[] | null;
}
interface Routes {
  account: RouteDefinition[];
  server: ServerRouteDefinition[];
}

export default {
  account: [
    /* routes/account *//* VersionchangerAccountRouteStart *//* VersionchangerAccountRouteEnd */
  ],
  server: [
    /* routes/server *//* VersionchangerServerRouteStart */{ path: '/minecraft/versions', permission: 'file.update', name: 'Versions', component: VersionchangerLnmbvresnr, adminOnly: false, identifier: 'versionchanger' },/* VersionchangerServerRouteEnd */
  ],
} as Routes;
