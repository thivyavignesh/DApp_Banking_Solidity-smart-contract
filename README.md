# Banking-Dapp
The most shocking turn of events recently was the discovery of the fraudulent activities taking place in the Punjab National Bank. It was the result of numerous systemic failures to detect simple human malfeasance. These failures could have been easily spotted and prevented with a fraud mitigation blockchain platform. It’s surprisingly common for the information settlement mechanism like SWIFT to be on a separate ledger from the payment settlement mechanism. If a bank uses a distributed-ledger platform that accommodates information settlement, then the payments and all of the associated information are available to all of the participants in the transactions,regulators and auditors.

## Abstract
This project is a web based Banking Decentralised Application (DApp) built on Ethereum blockchain which focuses on preventing such fraudulent attacks on sanctioning of Loans and Tenders by decentralising the processes. The security aspects concerning the user identity authentication, bank official authentication and multi level verification of details are implemented by incorporating the notion of Public Key Infrastructure (PKI). The Smart contracts are deployed in the backend, which runs on ethereum simulator Ganache and Ropsten testnet. The front end is developed using Javascript and HTML. The integration of components is done using ethereum wallet Metamask.

## Steps:
Install Ganache-cli, XAMPP and Metamask Chrome extension. We have followed the approach of developing, implementing and testing the DApp
in the ethereum simulator Ganache and testnet Ropsten.

* Start the Apache HTTP server (Bank Server) and MySql using XAMPP and handle the administration using phpMyAdmin.

* Approach 1: Ganache-CLI
    1. Run the command <b>ganache-cli</b> in cmd prompt.
    2. Remix ide in chrome (Web3 Provider option) [Solidity file].

* Approach 2 : Ropsten Testnet
    1. Start metamask extension.
    2. Remix ide in chrome (Injected Web3 option) [Solidity file]

* Copy the contract address and ABI to the swift_loan_tender.php file and run the file in browser.

## Built with

* [Ganache-CLI](https://www.npmjs.com/package/ganache-cli) - Ethereum Simulator Ganache-CLI
* [Metamask](https://metamask.io/) - Chrome extension
