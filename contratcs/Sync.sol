

// SPDX-License-Identifier: MIT
pragma solidity 0.8.0;




import {AxelarExecutable} from '@axelar-network/axelar-gmp-sdk-solidity/contracts/executable/AxelarExecutable.sol';
import {IAxelarGateway} from "@axelar-network/axelar-gmp-sdk-solidity/contracts/interfaces/IAxelarGateway.sol";
import {IAxelarGasService} from "@axelar-network/axelar-gmp-sdk-solidity/contracts/interfaces/IAxelarGasService.sol";




contract Sync is AxelarExecutable{
    constructor( address  gasService_,address gateway_) AxelarExecutable(gateway_){
        gasService = IAxelarGasService(gasService_);

}

    mapping (address=>txnDetails) public  addressToTxnDetails;
    mapping (address=>bytes) public  addressToId;
    mapping (bytes=>txnDetails)public idToTxnDetails;
    txnDetails[] public txnDetailsArray;
    bytes public id;
    string public  message;
    bytes [] public  idArray;


    struct txnDetails{
        address sender;
        uint256 timeStamp;
        uint256 amountSent;
        uint256 amountToRecieve;
        address addressTo;
    }
    txnDetails public check;
    mapping (address=>uint256) public accountToFunds;

    IAxelarGasService public   gasService;


function send(address _add) public  payable{
accountToFunds[msg.sender]=msg.value;
(bool sent,)= _add.call{value:msg.value}("");
if(!sent){
    revert();
}

} 
function sendMessage(address   _to,uint256 amountToRecieve, string calldata destinationChain, string calldata destinationAddress)external payable   {

// make sure the person who wants to recieve the money .i.e USer A is the one calling the function
 payable (_to).transfer(msg.value-10000000000000000);
    id = abi.encode(msg.sender,block.timestamp, msg.value, amountToRecieve, _to );
     idArray.push(id);
    txnDetails memory details;
    details.sender = msg.sender;
    details.amountSent = msg.value-10000000000000000;
    details.amountToRecieve = amountToRecieve;
    details.timeStamp = block.timestamp;
    details.addressTo =_to;

    addressToTxnDetails[msg.sender]=details;
    idToTxnDetails[id] = details;
    addressToId[msg.sender]=id;

gasService.payNativeGasForContractCall{value:10000000000000000}(

    address(this),
    destinationChain,
    destinationAddress,
    id,
    msg.sender
);

gateway.callContract(destinationChain,destinationAddress,id);

}

function _execute(string calldata sourceChain, string calldata sourceAddress, bytes calldata _id) internal override {
message = "first true";
  ( address sender,
    uint256 timeStamp,
    uint256 amountSent,
    uint256 amountToRecieve,
    address addressTo) =  abi.decode(_id,(address,uint256,uint256,uint256, address));
    

 
    txnDetails memory _txnDetails = txnDetails(sender,timeStamp,amountSent,amountToRecieve,addressTo);
        check =_txnDetails;
    (payable(_txnDetails.sender)).transfer(_txnDetails.amountToRecieve);

   message="true";
   
}

   
receive()external payable  {

 }
 fallback()external {

 }
 
  
}


//  0x674B22F64161a0d164b2A42E52B048929212A83E Polygon  
// 0x079C563acfCDc14221B527A403961ae9b4EAf562 Avalanche 
// 0x819A762041193A4006ae951b7ca9C225A2419DcA Goerli
//  0xC14F27474da331c4948EA9e2f8a9567406b0AaE1 Fantom