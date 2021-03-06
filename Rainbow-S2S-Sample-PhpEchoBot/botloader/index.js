'use strict';
/*=============================================================*
 * File: start-s2snode-core.js
 * Description : Rainbow-S2S-Starterkit-NodeJS launcher file
 *=============================================================*/
const S2sStarterkit = require('rainbow-s2s-starterkit-nodejs');
const sdkConfig = require('./config/config.json');

let cmdLineArgs = require('node-getopt').create([
        ['L', 'protocol=ARG', 'http protocol [http or https]'],
        ['L', 'port=ARG', 'http port'],
        ['L', 'jwt=ARG', 'json web token for authentication'],
        ['h', 'help', 'display this help'],
        ['v', 'version', 'show version']
    ]) // create Getopt instance
    .bindHelp() // bind option 'help' to default action
    .parseSystem(); // parse command line

const myS2sStarterkit = new S2sStarterkit(sdkConfig);
(async() => {
        await myS2sStarterkit.start().then((data) => {
                // data contains the callback_url
                // so your bot startup script can be called here if the bot is implemented in another language
        }).catch((e) => {
            console.error(e);
            (async() => {
                    myS2sStarterkit.stop().then((data)=>{
                            console.log(data);
                    }).catch((e) => {
                            console.log(e);
                    });
                    process.exit(0);
            })();
        });
})();

process.on('SIGHUP', () => {
    console.log('Got SIGHUP signal.');
});

process.on('SIGINT', () => {
    console.log('Got SIGINT signal.');
    console.log('SIGINT signal : calling myS2sStarterkit.stop()');
    (async() => {
        await myS2sStarterkit.stop().then((data)=>{
           console.log('SIGINT signal : data :'+data);
	}).catch((e) => {
           console.log('SIGINT signal : error :'+e);
	});
        process.exit(0);
    })();
});

process.on('SIGTERM', () => {
  console.info('SIGTERM signal received.');
  process.exit(0);
});

process.on('unhandledRejection', (reason, p) => {
    console.error(reason, 'Unhandled Rejection at Promise', p);
  }).on('uncaughtException', err => {
    console.error(err, 'Uncaught Exception thrown');
    process.exit(1);
});

/*
 Fired when the connection is successfull with Rainbow (signin complete)
*/
myS2sStarterkit.events.on('rainbow_onconnectioncreated', (data) => {
    console.log('S2sStarterkit : rainbow_onconnectioncreated : ' + JSON.stringify(data));
});

/*
 Fired when the connection can't be done with Rainbow (ie. issue on sign-in) 
*/
myS2sStarterkit.events.on('rainbow_onconnectionerror', (data) => {
    console.log('S2sStarterkit : rainbow_onconnectionerror : ' + JSON.stringify(data));
});
/*
 When a moderator changes the name of a bubble, this event is fired to all the members of the bubble (including the one who did the change) 
*/
myS2sStarterkit.events.on('rainbow_onbubblenamechanged', (data) => {
    console.log('S2sStarterkit : rainbow_onbubblenamechanged : ' + JSON.stringify(data));
});
/*
 Fired when a user changes the user connected affiliation with a bubble 
*/
myS2sStarterkit.events.on('rainbow_onbubbleownaffiliationchanged', (data) => {
    console.log('S2sStarterkit : rainbow_onbubbleownaffiliationchanged : ' + JSON.stringify(data));
});
/*
 Fired when the message has been read by the recipient 
*/
myS2sStarterkit.events.on('rainbow_onmessagereceiptreadreceived', (data) => {
    console.log('S2sStarterkit : rainbow_onmessagereceiptreadreceived : ' + JSON.stringify(data));
});
/*
 Fired when the message has been received by the server 
*/
myS2sStarterkit.events.on('rainbow_onmessageserverreceiptreceived', (data) => {
    console.log('S2sStarterkit : rainbow_onmessageserverreceiptreceived : ' + JSON.stringify(data));
});
/*
 When a moderator changes the topic data of a bubble, this event is fired to all the members of the bubble (including the one who did the change) 
*/
myS2sStarterkit.events.on('rainbow_onbubbletopicchanged', (data) => {
    console.log('S2sStarterkit : rainbow_onbubbletopicchanged : ' + JSON.stringify(data));
});
/*
 Fired when S2S starterkit is connected to Rainbow and ready to be used 
*/
myS2sStarterkit.events.on('rainbow_onready', (data) => {
    console.log('S2sStarterkit : rainbow_onready : ' + JSON.stringify(data));
});
/*
 Fired when the SDK tries to reconnect 
*/
myS2sStarterkit.events.on('rainbow_onreconnecting', (data) => {
    console.log('S2sStarterkit : rainbow_onreconnecting : ' + JSON.stringify(data));
});
/*
 Fired when the S2S starterkit has successfully started (not yet signed in) 
*/
myS2sStarterkit.events.on('rainbow_onstarted', (data) => {
    console.log('S2sStarterkit : rainbow_onstarted : ' + JSON.stringify(data));
});
/*
 Fired when a one-to-one message is received 
*/
myS2sStarterkit.events.on('rainbow_onmessagereceived', (data) => {
    console.log('S2sStarterkit : rainbow_onmessagereceived : ' + JSON.stringify(data));
});
/*
 Fired when the message has been received by the recipient 
*/
myS2sStarterkit.events.on('rainbow_onmessagereceiptreceived', (data) => {
    console.log('S2sStarterkit : rainbow_onmessagereceiptreceived : ' + JSON.stringify(data));
});
/*
 Fired when a receipt notification occurs 
*/
myS2sStarterkit.events.on('rainbow_onreceipt', (data) => {
    console.log('S2sStarterkit : rainbow_onreceipt : ' + JSON.stringify(data));
});
/*
  Fired when something goes wrong (ie: bad 'configurations' parameter, impossible to connect or reconnect, etc...) 
*/
myS2sStarterkit.events.on('rainbow_onerror', (data) => {
    console.log('S2sStarterkit : rainbow_onerror : ' + JSON.stringify(data));
});
/*
 Fired when an invitation to join a bubble is received 
*/
myS2sStarterkit.events.on('rainbow_onbubbleinvitationreceived', (data) => {
    console.log('S2sStarterkit : rainbow_onbubbleinvitationreceived : ' + JSON.stringify(data));
});

/*
 Fired when the connection is successfull with Rainbow (signin complete) 
*/
myS2sStarterkit.events.on('rainbow_onstopped', (data) => {
    console.log('S2sStarterkit : rainbow_onstopped : ' + JSON.stringify(data));
});
/*
 Fired when a user changes his affiliation with a bubble 
*/
myS2sStarterkit.events.on('rainbow_onbubbleaffiliationchanged', (data) => {
    console.log('S2sStarterkit : rainbow_onbubbleaffiliationchanged : ' + JSON.stringify(data));
});
/*
 Fired when a chat state change occurs in a conversation 
*/
myS2sStarterkit.events.on('rainbow_onchatstate', (data) => {
    console.log('S2sStarterkit : rainbow_onchatstate : ' + JSON.stringify(data));
});
/*
 Fired when a conversation is deleted 
*/
myS2sStarterkit.events.on('rainbow_onconversationremoved', (data) => {
    console.log('S2sStarterkit : rainbow_onconversationremoved : ' + JSON.stringify(data));
});
/*
 fired when the presence of the connected user changes 
*/
myS2sStarterkit.events.on('rainbow_onpresencechanged', (data) => {
    console.log('S2sStarterkit : rainbow_onpresencechanged : ' + JSON.stringify(data));
});
/*
 Fired when the S2S starterkit lost the connection with Rainbow 
*/
myS2sStarterkit.events.on('rainbow_ondisconnected', (data) => {
    console.log('S2sStarterkit : rainbow_ondisconnected : ' + JSON.stringify(data));
});

/*
 Fired when the connection is successfull with Rainbow (signin complete) 
*/
myS2sStarterkit.events.on('rainbow_onconnected', (data) => {
    console.log('S2sStarterkit : rainbow_onconnected : ' + JSON.stringify(data));
});
/*
 Fired when a change accurs in a conversation 
*/
myS2sStarterkit.events.on('rainbow_onconversationchanged', (data) => {
    console.log('S2sStarterkit : rainbow_onconversationchanged : ' + JSON.stringify(data));
});
/*
 Fired when a bubble presence changes. It is also raised when a bubble changes isActive from true to false (and reverse) 
*/
myS2sStarterkit.events.on('rainbow_onbubblepresencechanged', (data) => {
    console.log('S2sStarterkit : rainbow_onbubblepresencechanged : ' + JSON.stringify(data));
});
/*
 When a moderator changes the custom data of a bubble, this event is fired to all the members of the bubble (including the one who did the change) 
*/
myS2sStarterkit.events.on('rainbow_onbubblecustomdatachanged', (data) => {
    console.log('S2sStarterkit : rainbow_onbubblecustomdatachanged : ' + JSON.stringify(data));
});
/*
 Fired when the SDK didn't succeed to reconnect and stop trying 
*/
myS2sStarterkit.events.on('rainbow_onfailed', (data) => {
    console.log('S2sStarterkit : rainbow_onfailed : ' + JSON.stringify(data));
});
