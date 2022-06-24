function getBotResponse(input) {

    // Simple responses
    if (input == "hello") {
        return "Hello there";
    }else if (input == "goodbye") {
        return "Talk to you later!";
    }else if (input == "Payment Method") {
        return "GCASH";
    }else if (input == "Do you Deliver?, How about pick up option?") {
        return "It depends on the type of your transaction.";
    }else if (input == "What is your business hours?") {
        return "8:00am-8:00pm";
    }else {
        return "Try asking something else!";
    }
}