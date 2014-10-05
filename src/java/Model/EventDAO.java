/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Model;

import java.util.ArrayList;
import java.util.Date;

/**
 *
 * @author Ho_Jin_Wei_Benedict
 */
public class EventDAO {

    public static ArrayList<Event> getAllEvents() {

        ArrayList<Event> eventLists = new ArrayList();
        Date dateOjct = new Date();
        Event event1 = new Event("Interview Date has been set", dateOjct);
        eventLists.add(event1);
        Event event2 = new Event("Interview Dates for unavailabilty has been set", dateOjct);
        eventLists.add(event2);
        Event event3 = new Event("Prof Lan Jiao Way has responded to interview's availability and preferences", dateOjct);
        eventLists.add(event3);
        Event event4 = new Event("Prof BeOnSeh has responded to interview's availability and preferences", dateOjct);
        eventLists.add(event4);
        Event event5 = new Event("Prof Alamanda has responded to interview's availability and preferences", dateOjct);
        eventLists.add(event5);
        Event event6 = new Event("Interviews Constraints has been updated", dateOjct);
        eventLists.add(event6);
        return eventLists;

    }
}
