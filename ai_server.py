from flask import Flask, request, jsonify
import pickle
import numpy as np

app = Flask(__name__)

model = pickle.load(open("knn_diabetes.pkl","rb"))

@app.route("/predict", methods=["POST"])
def predict():

    data = request.get_json()

    input_data = np.array([[ 
        data["Age"],
        data["Diabetes"],
        data["Hypertension"],
        data["Protein_in_Urine"],
        data["Water_Intake"],
        data["Urine_Output"]
    ]])

    prob = model.predict_proba(input_data)[0][1]
    prediction = 1 if prob > 0.5 else 0

    return jsonify({
        "prediction": prediction,
        "risk_percent": round(prob*100,2)
    })

if __name__ == "__main__":
    app.run(port=5000)
