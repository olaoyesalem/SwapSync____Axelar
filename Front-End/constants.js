export const Goerli = "0x819A762041193A4006ae951b7ca9C225A2419DcA"
export const Avalanche = "0x079C563acfCDc14221B527A403961ae9b4EAf562"
export const Polygon = "0x674B22F64161a0d164b2A42E52B048929212A83E"
export const Fantom = "0xC14F27474da331c4948EA9e2f8a9567406b0AaE1"

export const abi = [
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "gasService_",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "gateway_",
				"type": "address"
			}
		],
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"inputs": [],
		"name": "InvalidAddress",
		"type": "error"
	},
	{
		"inputs": [],
		"name": "NotApprovedByGateway",
		"type": "error"
	},
	{
		"stateMutability": "nonpayable",
		"type": "fallback"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"name": "accountToFunds",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"name": "addressToId",
		"outputs": [
			{
				"internalType": "bytes",
				"name": "",
				"type": "bytes"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"name": "addressToTxnDetails",
		"outputs": [
			{
				"internalType": "address",
				"name": "sender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "timeStamp",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "amountSent",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "amountToRecieve",
				"type": "uint256"
			},
			{
				"internalType": "address",
				"name": "addressTo",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "check",
		"outputs": [
			{
				"internalType": "address",
				"name": "sender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "timeStamp",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "amountSent",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "amountToRecieve",
				"type": "uint256"
			},
			{
				"internalType": "address",
				"name": "addressTo",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes32",
				"name": "commandId",
				"type": "bytes32"
			},
			{
				"internalType": "string",
				"name": "sourceChain",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "sourceAddress",
				"type": "string"
			},
			{
				"internalType": "bytes",
				"name": "payload",
				"type": "bytes"
			}
		],
		"name": "execute",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes32",
				"name": "commandId",
				"type": "bytes32"
			},
			{
				"internalType": "string",
				"name": "sourceChain",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "sourceAddress",
				"type": "string"
			},
			{
				"internalType": "bytes",
				"name": "payload",
				"type": "bytes"
			},
			{
				"internalType": "string",
				"name": "tokenSymbol",
				"type": "string"
			},
			{
				"internalType": "uint256",
				"name": "amount",
				"type": "uint256"
			}
		],
		"name": "executeWithToken",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "gasService",
		"outputs": [
			{
				"internalType": "contract IAxelarGasService",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "gateway",
		"outputs": [
			{
				"internalType": "contract IAxelarGateway",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "id",
		"outputs": [
			{
				"internalType": "bytes",
				"name": "",
				"type": "bytes"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "idArray",
		"outputs": [
			{
				"internalType": "bytes",
				"name": "",
				"type": "bytes"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes",
				"name": "",
				"type": "bytes"
			}
		],
		"name": "idToTxnDetails",
		"outputs": [
			{
				"internalType": "address",
				"name": "sender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "timeStamp",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "amountSent",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "amountToRecieve",
				"type": "uint256"
			},
			{
				"internalType": "address",
				"name": "addressTo",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "message",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_add",
				"type": "address"
			}
		],
		"name": "send",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "amountToRecieve",
				"type": "uint256"
			},
			{
				"internalType": "string",
				"name": "destinationChain",
				"type": "string"
			},
			{
				"internalType": "string",
				"name": "destinationAddress",
				"type": "string"
			}
		],
		"name": "sendMessage",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "txnDetailsArray",
		"outputs": [
			{
				"internalType": "address",
				"name": "sender",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "timeStamp",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "amountSent",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "amountToRecieve",
				"type": "uint256"
			},
			{
				"internalType": "address",
				"name": "addressTo",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"stateMutability": "payable",
		"type": "receive"
	}
]