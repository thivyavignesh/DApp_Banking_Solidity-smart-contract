pragma solidity ^0.4.21;

contract Owned {
    address owner;
    
    function Owned() public {
        owner = msg.sender;
    }
    
    modifier onlyOwner {
        require(msg.sender == owner);
        _;
    }
}

contract Loan is Owned {
    
    uint nextId = 0;
    struct Loanee {
        string pkey;
        string fName;
        string lName;
        uint amt;
        string authkey;
        string authsign;
        uint id;
    }
    
    mapping (uint => Loanee) Borrowers;
    string[] public LoaneeAccts;
    
    event LoaneeInfo(
        string pkey,
        string fName,
        string lName,
        string authkey,
        string authsign,
        uint amt
    );
    
    uint id;
    
    function getid() view public returns (uint) {
        return id;
    }
    
    function setLoanee(string _address, string _fName, string _lName, uint _amt, string _authkey, string _authsign) public {
        var inst = Borrowers[nextId];
        
        inst.pkey = _address;
        inst.fName = _fName;
        inst.lName = _lName;
        inst.amt = _amt;
        inst.authkey = _authkey;
        inst.authsign = _authsign;
        
        LoaneeAccts.push(_address) - 1;
        LoaneeInfo(_address, _fName, _lName, _authkey, _authsign, _amt);
        id = nextId;
        inst.id = id;
        nextId++;
    }
    
    function getLoanee(uint id) view public returns (string, string, string, uint, string, string) {
        return (Borrowers[id].pkey, Borrowers[id].fName, Borrowers[id].lName, Borrowers[id].amt, Borrowers[id].authkey, Borrowers[id].authsign);
    }
    
    function countLoanee() view public returns (uint) {
        return LoaneeAccts.length;
    }
    
    struct Tend {
        string tendpkey;
        string org;
        uint tender_amt;
        uint tender_dur;
        uint tender_val;
        string tender_authkey;
        string tender_authsign;
    }
    
    mapping (uint => Tend) Organisation;
    string[] public TendAccts;
    
    event TendInfo(
        string tendpkey,
        string org,
        uint tender_dur,
        uint tender_amt,
        string tender_authkey,
        string tender_authsign
    );
    
    uint nextTend = 0;
    
    uint tendid;
    
    function getendid() view public returns (uint) {
        return tendid;
    }
    function setTend(string _address, string _org, uint _amt, uint _dur, string _authkey, string _authsign) public {
        var inst = Organisation[nextTend];
        
        inst.tendpkey = _address;
        inst.org = _org;
        inst.tender_dur = _dur;
        inst.tender_amt = _amt;
        inst.tender_val = _dur * _amt;
        inst.tender_authkey = _authkey;
        inst.tender_authsign = _authsign;
        
        TendAccts.push(_address) - 1;
        TendInfo(_address, _org, _dur, _amt, _authkey, _authsign);
        tendid = nextTend;
        nextTend++;
        
    
    }
    
    function getTend(uint id) view public returns (string, string, uint, uint, string, string) {
        return (Organisation[id].tendpkey, Organisation[id].org,  Organisation[id].tender_dur, Organisation[id].tender_amt, Organisation[id].tender_authkey, Organisation[id].tender_authsign);
    }
    
    function minTender() view public returns (string, string, uint, uint, string, string) {
         
        if (TendAccts.length == 4) {
            uint j = 0; 
            uint minT = Organisation[0].tender_val;
            for (uint i = 1; i<4; i++) {
                if (Organisation[i].tender_val < minT) {
                    minT = Organisation[i].tender_val;
                    j = i;
                }
            } 
            return (Organisation[j].tendpkey, Organisation[j].org, Organisation[j].tender_amt, Organisation[j].tender_dur, Organisation[j].tender_authkey, Organisation[j].tender_authsign);
        }
        else {
        return ("NULL","NULL",0,0,"NULL","NULL");
        }
    
    }
}
