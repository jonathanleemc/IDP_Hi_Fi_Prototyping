/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Model;

import java.sql.Time;
import java.util.Date;
import java.util.UUID;

/**
 *
 * @author Ho_Jin_Wei_Benedict
 */
public class Event {
    
    private String event_id; 
    private String event_details;
    private Date event_date;

    public Event(String event_details, Date event_date) {
        
        String uniqueID = UUID.randomUUID().toString(); 
        this.event_id = uniqueID;
        this.event_details = event_details;
        this.event_date = event_date;
    }

    public String getEvent_id() {
        return event_id;
    }

    public void setEvent_id(String event_id) {
        this.event_id = event_id;
    }

    public String getEvent_details() {
        return event_details;
    }

    public void setEvent_details(String event_details) {
        this.event_details = event_details;
    }

    public Date getEvent_date() {
        return event_date;
    }

    public void setEvent_date(Date event_date) {
        this.event_date = event_date;
    }
    
}
