# SwapSync____Axelar💱
## SwapSync - The Ultimate Token Swapping Marketplace

### *AN OSCAFEST X AXELAR HACKHATHON PROJECT*

Welcome to SwapSync, the one-stop marketplace for seamless token swaps! With SwapSync, you can easily connect with other users and exchange tokens that you need , creating a synchronized ecosystem of swapping possibilities- Trade by better. Whether you're looking to trade AVAX for MATIC or any other token combination, SwapSync has got you covered!

 * #### Team Members
 **OLAOYE SALEM IYANULOLUWA olaoyesalemgreat@gmail.com**
 <br>
 **OLAH ISRAEL olahisrael07@gmail.com**
 <br>
  **IVOR  EDAFE  ivoredafej@gmail.com**
 <br>


* #### Members Role
   **Olaoye Salem Iyanuloluwa**: Responsible for writing and deploying smart contract; co- writing the script connecting Front-End and smart contract.
  <br>
  **OLAH ISRAEL**:Responsible Writing the front-end and co-writing the script connecting Front-End and smart contract.
  <br>
  **IVOR EDAFE** : Responsible for co-writing the front-end and the backend.

#### Features
  
**Token Swapping Made Effortless**: With the help of Axelar's groundbreaking technology and it's GMP function,Our intuitive platform allows you to create and browse swap offers with ease. Find the tokens you need and connect with users who are willing to trade. No more endless searching and complex procedures!

**Secure and Reliable**:SwapSync prioritizes the security of your tokens. We leverage the cutting-edge technology of Axelar, the sponsor of this hackathon, to ensure the utmost safety and trustworthiness throughout the swapping process.

**Community-Driven**: Join a vibrant community of token enthusiasts, traders, and blockchain explorers. Collaborate, discuss, and discover new swapping opportunities within our platform. SwapSync is where like-minded individuals unite!

**Flexible Token Support**:Although,this version of SwapSync is on testnet. It supports a wide variety of tokens across different blockchains From Goerli Ethereum to Avalanche, to Polygon,Fantom etc. Unleash the power of cross-chain swapping and expand your token portfolio.

#### Getting Started
To get started with SwapSync, follow these simple steps:
  <br>
Visit https://swapsync.000webhostapp.com
<br>
**Register:** To get started, simply register at SwapSync using your email and password.

**Browse Swap Offers**: Explore the marketplace to discover swap offers that match your requirements. Find the tokens you need and review the details of each offer, including the tokens offered and tokens requested.

**Create a Swap Offer**: If you can't find an existing swap offer that suits your needs, create your own! Specify the tokens you have and the tokens you want, and set the desired swap ratio.

**Connect and Swap**: Once you find a swap offer that catches your eye, reach out to the user who created it. Coordinate and confirm the details of the swap, ensuring a smooth and mutually beneficial transaction.

**Stay Engaged**: Stay connected with the SwapSnc community to discover new swap opportunities, engage in discussions, and share your swapping experiences. We're building a collaborative ecosystem together!



#### Project Status
As of 27/06/2023, the SwapSync project is currently in a partially integrated state. The smart contract has been developed and thoroughly tested, while the front-end interface has been completed separately. Due to time constraints, the integration of the smart contract and front-end components has not been finalized.


#### How To Clone and Use The Project
* Clone the project by running the command
 ```
 git clone https://github.com/olaoyesalem/SwapSync____Axelar.git
```
* Install the dependencies by running the command
```
 npm i
```
* Run the application by running the command
```
 npm run dev
```

Connect your wallet to the application
Make your Swap!

#### SwapSync Interaction Flow
The following steps outline the interaction flow within the SwapSync platform:

* User A visits SwapSync and creates an offer, specifying the token they have and the token they want to swap. This offer is displayed in the offer section of the platform.
* User B discovers User A's offer on SwapSync and decides to accept it.
* User A receives an email notification confirming that their offer has been accepted. The notification includes details about the accepting user (User B) and the tokens involved in the swap.
* User A returns to SwapSync and proceeds with the swap transaction, utilizing the smart contract to facilitate the token exchange.
* The swap is executed, transferring the specified amount of tokens from User A to User B, and vice versa.
* Both User A and User B receive a confirmation of the successful swap.
<br>
Please note that the above flow assumes the successful integration of the smart contract and front-end interface, which is currently under development and not finalized in this repository.

#### Smart Contract
To use the smart contract, follow these steps:
This use case 
assumes that a user A wants 1 matic and has 2 Avax up for grabs.
It also assumes User A has created the  offer above .
It also assumes that User B has accepted User A's offer.

* **Step 1**: Go to the contract folder and deploy the smart contract.
* **Step 2**: User B sends native token to the smart contract of swap sync of the desired chain(e.g. User B sneds matic to Polygon chain ).
* **Step 3**: User A sends his token(the one he wants to swap) to user B, pays for gas simulteneously sending a struct to  the smart contract on the polygon chain to send User A's token(the token sent by User B to the polygon smart contract) to User A's address using axelar's GMP by calling this function
  ```
  function sendMessage(address   _to,uint256 amountToRecieve, string calldata destinationChain, string calldata destinationAddress)external payable   {}

  ```

* **Step 4**:Swap is complete!  

Please note that the integration step between the smart contract and the front-end interface is not currently included in the setup instructions. However, you can still run and test each component individually.

#### Support
If you encounter any issues, have questions, or need assistance, our dedicated support team is here to help! Feel free to reach out to us at

olaoyesalemgreat@gmail.com .
<br>
olahisrael07@gmail.com
<br>
ivoredafej@gmail.com
We'll be more than happy to assist you.

#### API LINK
https://swapsync-dev.up.railway.app/api/schema/swagger-ui/
#### License
This project is licensed under the MIT License.

#### AXELAR LINK
This link shows an instance where two users swap avax for matic using axelar's GMP
https://testnet.axelarscan.io/gmp/0x5e9b5e0c64f0eddf5b1ed6f98ce21371d76e8c54a00b68bfa7ccd5debf2a913c

#### Positive experiences of learning and using Axelar:
**I experienced expanded interoperability for my dApps**: With Axelar, I was able to build decentralized applications (dApps) that seamlessly interacted with multiple blockchain networks. This empowered me to create innovative solution that leveraged the functionalities and assets from various chains(which is a key part to the creation of SwapSync). Axelar's cross-chain communication capabilities allowed me to provide a comprehensive user experience, which will enable my users to effortlessly interact with different chains and access a wide range of applications and assets with just a single click.

**I trusted in the security and stability of Axelar**: Axelar's use of the proven proof-of-stake (PoS) consensus mechanism, employed by reputable blockchain networks like Ethereum, Polygon, and Cosmos, gave me confidence in the security and stability of my cross-chain transactions. Building on PoS, Axelar ensured a robust and secure environment for my interchain applications. This allowed me to focus on building innovative solutions without compromising the safety and integrity of my users' transactions.

#### SwapSync Supported Chains and ChainId[TESTNETS]
Right Now, Swap Sync allows swapping of tokens from these chains:

* Ethereum Goerli 5
* Polygon 80001
* Avalanche 43113
* Fantom 4002
#### Technologies
* Solidity
* Remix-IDE
* ethers.js
* axelar
* hardhat
