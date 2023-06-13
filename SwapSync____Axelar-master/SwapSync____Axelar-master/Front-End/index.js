// This script shows how the whole txn will go

// This Script also assumess that two users, User A and User B have been matched
// This is also an example for transferring avax for matic
// i.e. interacting with the Avalanche and Polygon

// USer B sends 1 matic to the polygon Chian
// User A sends txn To the avax chain



const gasFee = ethers.utils.parseEther("0.01")
import { ethers } from "../Front-End/ethers-5.6.esm.min.js"
import{Goerli,
    Avalanche,
    Fantom,
    Polygon,
    abi} from "../Front-End/constants.js"



const connectButton = document.getElementById("connectButton")
connectButton.onclick = connect

const sendForB = document.getElementById("Send")
sendForB.onclick = sendByUserB

const sendForA = document.getElementById("SendButton")
sendForA.onclick = SendByUSerA






function listenForTxnMine(txnResponse, provider) {
    // this is to listen to the blockchain and see events that has happened
    console.log(`Mining ${txnResponse.hash} hash`)

    //create a listner for the blockchain
    return new Promise((resolve, reject) => {
        provider.once(txnResponse.hash, (transactionReceipt) => {
            console.log(
                `Completed with ${transactionReceipt.confirmations} confirmations`
            )
            resolve()
        })
    })
}





async function connect(){
    if(typeof window.ethereum !=="undefined"){
        try {
            
            await window.ethereum.request({method:'eth_requestAccounts'})

        } catch (error) {
            console.log(error)
            
        }
        connectButton.innerHTML = "CONNECTED!!!"   
        window.alert(["CONNECTED"])
    }
    else{
        connectButton.innerHTML = "INSTALL METAMASK"
        window.alert(["INSTALL METAMASK"])
    }
}


async  function sendByUserB(){// User B is the one that accepted the offer
    // and he will send to the respective chain for this example
    // Polygon. We can get it from constants.js
    // ideally it shouldn't be the user that will input this
    // Since the offer has been made.
    // it is what user B has promised to give that should be automatically pop up
    // whne they click the function


    const amount = document.getElementById("amount").value

    
    if(typeof window.ethereum !=="undefined"){
        const provider = new ethers.providers.Web3Provider(window.ethereum)
        const signer = provider.getSigner()
        const contract = new ethers.Contract(Polygon,abi,signer)
    
            try {
                let txn ={
                    to:Polygon,
                    value:ethers.utils.parseEther(amount)
                }
           const txnResponse = await signer.sendTransaction(txn) 
           await listenForTxnMine(txnResponse,provider)
                console.log("SuccessFul")




            } catch (error) {
                console.log(error)
            }

    }

}

// if USer B ahs succesffully Snet his money, then 
// User A kicks of the txn

async function SendByUSerA(){
    // User A kicks of the txn , but this part is tricky
    // Why?
    // USer A will only input the amount he wants to send,
    // or ideally from the from the front end  if we have noticed the amount 
    // User A wants to swap with we input it ourselves ehen he tries to swap
    // by calling the function

    // also we add gas fee

    // So if User A wants to send 2 avax and get 1 matic back
    // That means he is taking from avalanche to the polygon muimbai network
    if(typeof window.ethereum !=="undefined"){
        const provider = new ethers.providers.Web3Provider(window.ethereum)
        const signer = provider.getSigner()
        const contract = new ethers.Contract(Avalanche,abi,signer) // therefore this will be avalanche, according to what I said 4 lines above
    


            try{
           const txnResponse = await contract.sendMessage(
            /*  address _to i.e User B's Address*/ _to,
            /* amount to recieve , since User a wants to reciev 1 matic then */ethers.utils.parseEther("1"),
            /**destinationChain Should be string  */ "Polygon", // It is polygon since it is talking to the polygon blockchain
            /** destinationAddress */ Polygon, // This is the destination address of SwapSync smart contract
          {value:gasFee+ ethers.utils.parseEther("2")}// This is because the user AA is send @ avax
          // He addds the gas fees
            ) // then itt talks to the polygon network
           await listenForTxnMine(txnResponse,provider)
                console.log("SuccessFul")




            } catch (error) {
                console.log(error)
            }

    }


}