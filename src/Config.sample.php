<?php

namespace App;

class Config {
    // ElectrumX Dashboard (EXD) password for login. You should additionally change the name of
    // EXD folder to something unique, if accessible via the web. You can also limit the access
    // to a specific IP with the option below.
    const PASSWORD = "MY-PASSWORD";
    // IP that can access EXD:
    // If empty (""), any IP can access EXD. If "localhost", only localhost can access EXD.
    // If "localhost" only localhost (IPv4/v6) can access EXD).
    // If specific IP (e.g. "84.12.32.297"), localhost and the specific IP can access EXD.
    const ACCESS_IP = "";

    // IP of ElectrumX RPC server
    const RPC_IP = "127.0.0.1";
    // Port of ElectrumX RPC server
    const RPC_PORT = "8000";

    // EXD uses ip-api.com to get the country and isp of peers/sessions. The API is limited to 15 
    // requests per minute. Geo data is stored as long as the peers are connected. A page reload 
    // (main/peers/sessions) only causes an API request if new peers connected (older than 10 minutes) 
    // since the last page load. Up to 100 ips are checked per request. Peers/sessions that are no longer
    // connected, are removed from the cache.
    const PEERS_GEO = TRUE;
    const SESSIONS_GEO = FALSE;
    // Maximum of seconds to wait for responses from ip-api.com
    const GEO_TIMEOUT = 2;
}
?>
