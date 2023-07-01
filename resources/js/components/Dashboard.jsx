import React from "react";
import TotalBin from "./Bin/TotalBin";
import Instock from "./Bin/Instock";
import Outstock from "./Bin/Outstock";
// import Delivering from "./Delivery/Delivering";
// import Pending from "./Delivery/Pending";
import Completed from "./Delivery/Completed";
import InTransit from "./Delivery/InTransit";
import Returned from "./Delivery/Returned";
import TotalCost from "./Cost/TotalCost";
import DeliveryCost from "./Cost/DeliveryCost";
import SavingCost from "./Cost/SavingCost";

const Dashboard = () => {
    return(
    <div>
        {/* BIN */}
        <h2>Bin</h2>
        <section class="section dashboard">
            <div class="row">
                <TotalBin/>
                <Instock/>
                <Outstock/>
            </div>
        </section>
        {/* DELIVERY */}
        <h2>Delivery</h2>
        <section class="section dashboard">
            <div className="row">
                {/* <Delivering/> */}
                <InTransit/>
                <Returned/>
                {/* <Pending/> */}
                <Completed/>
            </div>
        </section>
        {/* COST */}
        <h2>Cost</h2>
        <section class="section dashboard">
            <div className="row">
                <TotalCost/>
                <DeliveryCost/>
                <SavingCost/>
            </div>
        </section>
    </div>
    )
};

export default Dashboard;
