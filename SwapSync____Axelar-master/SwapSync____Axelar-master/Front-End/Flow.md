## FLOW FOR SWAP SYNC
## EVERYTHING IS ON TESTNETS
####
User A creates an Offer.... if User B likes the offer, he gets notified.
When User A and User B are matched. 
Example.
User A needs 1 matic and has 2 avax up for grabs. User B wants 2 avax and can give 1 matic.
Therefore,

User B first sends 1 matic to the polygon chain
USer A sends 2 avax(to User B) plus gas fee in one txn.
User B then gets 2 avax
User A gets 1 matic.

### NOTE
The Smart Contract for all the chains are the same i.e. thier abi are the same, but thier addresses differ.
Thier addresses are stored in constants.js

USer A is always the one who createes Offer