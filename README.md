# Dungeon-Dragoning
Basic web backend for sharing foundry sessions without breaking the license. Some things are broken and will remain broken because it was way simpler and faster doing it locally.

The dungeon-dragoning folder was located in /var/www/html of a hosted VM. The server was running on Apache. Foundry was installed at /home/dungeonmaster/foundry, and configured to run on the port 42069.

The Dungeon Masters could log in, and see if any world is currently running. If there is, they have the choice to close it. Otherwise, they could choose from one of their worlds and start it. The intention was not having multiple sessions of the same license running, and having an easier and more straightforward way of sharing the license (rather than always letting each other know that we're currently using foundry).

